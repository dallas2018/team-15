from SignInApp.mainApp import app, db
from SignInApp.models import Member
from flask_script import Manager, prompt_bool
import requests
from spreadsheet import sheet
from dues import transactions, member_info

manager = Manager(app)

if __name__ == '__main__':
	manager.run()

