# Icons Blade Components for Laravel
jinyIcon is icon generator by PHP. It is easy to use fure PHP and Laravel Framwork.

## Install
컴포를 이용하여 설치를 합니다.
```
composer require jiny/icon
```

## How to use
JinyIcon은 두가지 방법으로 사용이 가능합니다. helper 함수를 이용한 호출방식과 라라벨 프레임워크의 컴포넌트를 이용한 방법입니다.

### Helper 
`xIcon()` 핼퍼 함수를 이용하여 다음과 같이 아이콘을 호출할 수 있습니다.
```php
xIcon("o-academic-cap", $type="heroicon")->setClass("w-8 h-8");
```

### Laravel Component
라라벨의 Blade View를 사용하고 있는 경우 `<x-icon/>` 단일 테그를 이용하여 아이콘을 호출할 수 있습니다.

```php
<x-icon type="heroicon" name="o-academic-cap" class="w-4 h-4"/>
```

## Icon set

### Heroicon
https://heroicons.com/

```php
<x-heroicon name="o-academic-cap" class="w-4 h-4"/>
```

## License
jinyPHP icons is open-sourced software licensedd under MIT license.
