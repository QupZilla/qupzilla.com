#!/bin/bash
#
# Remove BOM (Byte Order Mark) from translations

test -d app || cd ..
cd app/translations

sed -i '1 s/^\xef\xbb\xbf//' *.php
