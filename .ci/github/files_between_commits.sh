#!/bin/sh

branch=$1
hash=$2

git fetch origin

# root folder of added files
git diff --color --name-only --diff-filter=A ${branch}..${hash} | cut -d/ -f1 || exit 1

# list changed root files
git diff --name-only ${branch}..${hash} | grep '/' -v || exit 1

# the previous command lists the changed files as their new name, so we list the original names too
git diff ${branch}..${hash} | grep '^rename from' | sed 's/^rename from //' | cut -d/ -f1 || exit 1
