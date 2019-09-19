from bottle import route, run, response, redirect, request, template
import bcrypt
import re
import sqlite3

db = sqlite3.connect('main.db')
cursor = db.cursor()


@route('/')
@route('/dashboard')
def dashboard():
    return template('templates/dashboard.html')


@route('/login')
def index():
    return template('index.html')


@route('/login', method='POST')
def handle_login():
    email = request.forms.get('email')
    password = request.forms.get('password')

    if email != "" or password != "":
        transact = cursor.execute(
            'SELECT id, fullname FROM user WHERE email = ? AND password = ?', (email, password,))
        result = cursor.fetchone()
        if result != None:
            response.set_cookie('user_id', str(result[0]))
            return "logged in " + result[1]
        else:
            return "Invalid Username or password"
    else:
        return "Email or Password is empty"


@route('/signup')
def signup():
    return template('signup_page.html')


@route('/signup', method='POST')
def hand_signup():
    try:
        cursor.execute('''
            CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT, fullname TEXT, email TEXT UNIQUE, username TEXT UNIQUE, password TEXT, cpassword TEXT)
        ''')
        print('Table Created')
    except:
        print('cannot create table')

    fullname = request.forms.get('fullname')
    email = request.forms.get('email')
    username = request.forms.get('username')
    password = request.forms.get('password')
    cpassword = request.forms.get('cpassword')

    if (fullname == ""):
        return "Name is Empty"
    elif (email == ""):
        return "Email is Empty"
    elif username == "":
        return "Empty Value in Username"
    elif (re.match(r'\w+\.?@\w+\.\w+', email) == None):
        return "Invalid Email Address"
    elif password == "" or cpassword == "":
        return "Password fields might be empty"
    elif password != password:
        return "passwords do not match"
    else:
        try:
            cursor.execute('INSERT INTO user (fullname, email, username, password, cpassword) VALUES(?,?,?,?,?)',
                           (fullname, email, username, password, cpassword,))
            db.commit()
            print('document inserted')
            db.close()
            return redirect('/login')
        except:
            db.rollback()
            print('Unkbown error in registration')
            return "Error in registration, Please try again"


# Return static files
@route('/<filepath:path>')
def static(filepath):
    return static_file(filepath, root='./assets/')


run(reloader=True, debug=True)
