.PHONY: deps
all: 
	vagrant up

deps:
	virtualenv venv
	. venv/bin/activate && pip install ansible

