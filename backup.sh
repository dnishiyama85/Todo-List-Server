#!/bin/bash
today=$(date "+%Y%m%d-%H%M%S")
DIR=$(cd $(dirname $0); pwd)/backup
backupfile="save.json-${today}.gz"
OUT_FILE=${DIR}/${backupfile}
gzip -c save.json > ${OUT_FILE}
