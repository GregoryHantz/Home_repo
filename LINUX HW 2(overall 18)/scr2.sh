#!/bin/bash

word=$1
file=$2
write=$3

word_counter=`grep -o "\<$word\>" "$file" | wc -l`
line_counter=`grep -n "\<$word\>" "$file" | cut -f1 -d: | awk '{printf("%s", NR == 1 ? $0 : ", "$0);} END {printf("\n");}'`

echo "$word: $word_counter [$line_counter]" >> $write
