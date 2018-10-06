from flask_script import Manager, prompt_bool
import requests
from FlaskApp.models import applicant

manager = Manager(app)

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
			unfinished += 1
		count += 1
	return unfinished/count

if __name__ == '__main__':
	manager.run()