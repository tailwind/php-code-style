#!/usr/bin/env bash

SCRIPT_DIR=$( cd "$(dirname "${BASH_SOURCE[0]}")" ; pwd -P )

${SCRIPT_DIR}/../vendor/bin/phpcs --colors --standard=${SCRIPT_DIR}/../src/Tailwind/Standard/Tailwind ${SCRIPT_DIR}/../test/linting/
