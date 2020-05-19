#!/bin/bash

sudo usermod -a -G www-data $USER
sudo chgrp www-data -R conf
sudo chmod g+rwxs -R conf