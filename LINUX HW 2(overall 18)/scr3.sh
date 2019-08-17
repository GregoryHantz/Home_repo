#!/bin/bash

for param in $@; do
        if [[ "$param" =~ ^--url= ]]; then
                url=$(echo $param | sed 's/--url=//')
        fi
        if [[ "$param" =~ ^--word= ]]; then
                word=$(echo $param | sed 's/--word=//')
        fi
        if [[ "$param" =~ ^--file= ]]; then
                file=$(echo $param | sed 's/--file=//')
        fi
done
kol=$(curl $url |grep -ow $word |wc -w)
str=$(curl $url |grep -nw $word |cut -f1 -d: |tr "\n" ", ")
echo $word':' $kol [$str] > $file
echo $word':' $kol [$str]