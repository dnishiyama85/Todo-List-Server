#!/bin/bash
today=$(date "+%Y%m%d-%H%M%S")
DIR=$(cd $(dirname $0); pwd)
backupfile="save.json-${today}.gz"
TARGET_FILE=${DIR}/save.json
OUT_FILE=${DIR}/backup/${backupfile}
gzip -c ${TARGET_FILE} > ${OUT_FILE}
