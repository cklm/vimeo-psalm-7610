# howto reproduce
1. clone this repo
2. Download psalm `curl https://github.com/vimeo/psalm/releases/download/4.20.0/psalm.phar -o psalm.phar`
3. run psalm `./psalm.phar`

output should be:

    Target PHP version: 7.2 (inferred from composer.json)
    Scanning files...
    Analyzing files...
    
    E
    
    ERROR: UndefinedFunction - src/AppBundle/Helper/SomeHelper.php:10:12 - Function AppBundle\Helper\str_starts_with does not exist (see https://psalm.dev/021)
    if(str_starts_with('foobar','foo')) {
    
    
    ERROR: UndefinedFunction - src/AppBundle/Helper/SomeHelper.php:14:12 - Function AppBundle\Helper\str_contains does not exist (see https://psalm.dev/021)
    if(str_contains('foobar','foo')) {
    
    
    ------------------------------
    2 errors found
    ------------------------------
    
    Checks took 0.15 seconds and used 26.312MB of memory
    Psalm was able to infer types for 100% of the codebase

So the two functions in index.php are suppressed correctly, the two in `/src/AppBundle/Helper/SomeHelper.php` not.