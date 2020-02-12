#!/bin/sh

cd
cd GitHub/Web_iLab/myilabweb/src

quasar build -m pwa

cd ../dist/pwa
cp -rf . ../../../docs