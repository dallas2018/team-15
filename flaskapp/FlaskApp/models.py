from datetime import datetime
from SignInApp import db
from flask_sqlalchemy import SQLAlchemy
import json
import requests
from cryptography.fernet import Fernet

db = SQLAlchemy()

class Applicant(db.Model):
	id = db.Column(db.Integer, primary_key = True)
	firstName = db.Column(db.String(80))
	lastName = db.Column(db.String(80))
	email = db.Column(db.string(100))
	phone = db.Column(db.Integer(10))
	finished = db.Column(db.Boolean)

@staticmethod
def get_by_id(id):
	return User.query.filterby(id = id).first()

@staticmethod
def get_by_email(email):
	return User.query.filter_by(email = email).first()