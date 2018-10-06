from SignInApp.mainApp import app, db
from SignInApp.models import Member
from flask_script import Manager, prompt_bool
import requests
from spreadsheet import sheet
from dues import transactions, member_info

manager = Manager(app)

if __name__ == '__main__':
	manager.run()

@manager.command
def initdb():
	db.create_all()
	db.session.add(Applicant())
	refreshdb()

@manager.command
def unfinished():
	count = 0
	unfinished = 0
	for applicant in Applicant.query.all():
		if(not applicant.finished):
			unfinished++
		count++
	return unfinished/count

if __name__ == '__main__':
	manager.run()