#!/bin/bash

data=$(date +%d-%m-%Y-%H-%M-%S);
#cd /home/icarvalho/phing/testeguia/tests
dir="build-$data"
mkdir $dir
phpunit --debug --coverage-html="$dir/coverage"  --coverage-text="$dir/result.txt" --coverage-xml $dir --coverage-clover "$dir/coverage.xml"   ./ > $dir/phpunit.txt
pdepend --jdepend-chart="$dir/chart-depend.svg" --overview-pyramid="$dir/overview.svg" --coverage-report="$dir/coverage.xml" ./
phploc --names-exclude="*Test.php" ./ > $dir/phploc.txt
phpmd ./*.php html codesize,unusedcode,cleancode,design > $dir/phpmd.html
phpcpd ./ --names="*.php" --names-exclude="*Test.php" --log-pmd="$dir/phpcpd.xml" > $dir/phpcpd.txt
