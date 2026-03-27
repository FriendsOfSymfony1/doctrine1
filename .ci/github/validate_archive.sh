#!/bin/sh

archive_name=$1
pattern_file=$(dirname $0)/archive_allow.txt

if [ ! -f "$pattern_file" ]
then
  echo "config file not exists: $pattern_file"
  exit 1
fi

# test for empty

archive_content=$(tar -tf $archive_name)

for pattern in $(cat $pattern_file)
do
  archive_content=$(echo "$archive_content" | grep -v "^$pattern")
done

if [ $(echo "$archive_content" | grep ^$ -v | wc -l) -gt 0 ]
then
  echo "Files not allowed in archive:"
  echo "$archive_content"
  exit 1
fi
