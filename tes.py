# from flask import Flask, render_template, request, redirect, session
# import hashlib
# import mysql.connector

# app = Flask(__name__)
# app.secret_key = 'your_secret_key'  # Ganti dengan kunci rahasia yang lebih aman

# def connect_db():
#     dbc = mysql.connector.connect(
#         host = 'localhost',
#         user = 'user',
#         password = '6Vmv-Jl/Sba4F9jM',
#         database = 'data_sales'
#     )
#     return dbc

# @app.route('/login', methods=['POST'])
# def login():
#     if request.method == 'POST':
#         username = request.form['username_']
#         password = hashlib.md5(request.form['password'].encode()).hexdigest()

#         conn = connect_db()
#         cursor = conn.cursor()

#         # Pastikan tabel user_account dan kolomnya sesuai dengan struktur di database
#         cursor.execute("SELECT COUNT(*) FROM user_account WHERE username_ = ? AND password_ = ?", (username, password))
#         result = cursor.fetchone()
#         conn.close()

#         count = result[0]
#         session.clear()

#         if count > 0:
#             session['IsLoggedIn'] = True
#             session['username_'] = username
#             return redirect('/homeDashboard')
#         else:
#             return redirect('/loginForm')

# @app.route('/homeDashboard')
# def home_dashboard():
#     if 'IsLoggedIn' in session and session['IsLoggedIn']:
#         return render_template('homeDashboard.php', username=session['username_'])
#     else:
#         return redirect('/loginForm')

# @app.route('/loginForm')
# def login_form():
#     return render_template('loginForm.html')

# if __name__ == '__main__':
#     app.run(debug=True)

# coba untuk membuat backend menggunakan python flask