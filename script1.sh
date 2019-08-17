#!/bin/bash

SERVER=$1
FILE=$2


scp $FILE $SERVER:~

exit 0