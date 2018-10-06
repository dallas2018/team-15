from __future__ import print_function
import sys, os, operator
from datetime import datetime
from flask import Flask, render_template, request, flash, redirect, url_for
from flask_sqlalchemy import SQLAlchemy 
from SignInApp.models import Member
from SignInApp import db, app
import requests
import time
import json
import smtplib
from itsdangerous import URLSafeTimedSerializer
from sqlalchemy import func 
import ntpath

basedir = os.path.abspath(os.path.dirname(__file__))
date = time.strftime("%m/%d/%Y")

@app.route('/newuser', methods=['GET', ['POST']])
def index():