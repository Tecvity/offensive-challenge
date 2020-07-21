#!/bin/bash

service apache2 start && \
	service mysql start && \
	mysql < queries.sql && \
	mkdir xls && \
	cd xls && \
	echo "l33t{fl4g}" > fl4g.txt && \
	echo "[#] http://127.0.0.1:80"
	tail -f /var/log/apache2/access.log
