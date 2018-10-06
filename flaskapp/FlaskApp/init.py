import os

from flask import Flask 
from flask_sqlalchemy import SQLAlchemy
from flask.ext.security import Security, SQLAlchemyUserDatastore

basedir = os.path.abspath(os.path.dirname(__file__))

app = Flask(__name__)
app.config['SECRET_KEY'] = '+2"F\xc1\xc8\x00\xd2\xc4\x05\xac\\\xa7\xec6BK\x0e\x12\x9c\xed\x88V\x97'
#app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///' + os.path.join(basedir, 'signin.db')
app.config['SQLALCHEMY_DATABASE_URI'] = os.environ['DATABASE_URL']
app.config['DEBUG'] = False
app.config['SECURITY_RECOVERABLE'] = False
app.config['SECURITY_REGISTERABLE'] = False
db = SQLAlchemy(app)

app.config.update(
	DEBUG=True
)
