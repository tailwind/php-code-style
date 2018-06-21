#!/usr/bin/env bash

SCRIPT_DIR=$( cd "$(dirname "${BASH_SOURCE[0]}")" ; pwd -P )

cp ${SCRIPT_DIR}/../test/test-pre-fix.php ${SCRIPT_DIR}/../test/testing.php

${SCRIPT_DIR}/../vendor/bin/phpcbf --colors --standard=${SCRIPT_DIR}/../src/Tailwind/Standard/Tailwind ${SCRIPT_DIR}/../test/testing.php >> /dev/null

cmp --silent ${SCRIPT_DIR}/../test/testing.php ${SCRIPT_DIR}/../test/test-post-fix.php  || echo "Code fixing failed" && exit 2;