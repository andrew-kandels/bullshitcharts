#!/bin/bash
cd $(dirname $0)
git rev-parse HEAD > ./../version.txt
