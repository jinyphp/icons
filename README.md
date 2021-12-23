<p align="center">
    <a href="#">
        <img src="./images/jiny.png" width="200">
    </a>
</p>

# Icons Blade Components for Laravel
jinyIcon is icon generator by PHP. It is easy to use fure PHP and Laravel Framwork.

## Install
컴포를 이용하여 설치를 합니다.
```
composer require jiny/icons
```

## How to use
JinyIcon은 두가지 방법으로 사용이 가능합니다. helper 함수를 이용한 호출방식과 라라벨 프레임워크의 컴포넌트를 이용한 방법입니다.

### Helper 
`xIcon()` 핼퍼 함수를 이용하여 다음과 같이 아이콘을 호출할 수 있습니다.
```php
xIcon("o-academic-cap", $type="heroicon")->setClass("w-8 h-8");
xIcon("o-academic-cap")->setType("heroicon")->setClass("w-8 h-8");
```

### Laravel Component
라라벨의 Blade View를 사용하고 있는 경우 `<x-icon/>` 단일 테그를 이용하여 아이콘을 호출할 수 있습니다.

```php
<x-icon type="heroicon" name="o-academic-cap" class="w-4 h-4"/>
```

## Icon set
지니Icon은 다양한 무료 MIT의 오픈 아이콘 세트를 지원합니다. 누구나 패키지에 새로운 SVG 아이콘을 추가하여
기여할 수 있습니다. `/resources/view` 폴더안에 `type`명의 폴더를 생성하고, svg 파일을 저장만 하여 커밋하면 됩니다.

* [Heroicon](https://heroicons.com/)
* Academicons
* Akar Icons
* Ant Design Icons
* Bootstrap Icons
* boxicons
* bytesize
* carbon
* clarity
* coolicons
* country-flags
* cryptocurrency
* zondicons
* weather-icons
* vaadin-icons
* unicons
* uiw-icons
* typicons
* teeny-icons
* tabler-icons
* system-uicons
* simple-line-icons
* simple-icons
* rpg-awesome-icons
* remix-icon
* radix-icons
* prime-icons
* pixelarticons
* phosphor-icons
* pepicons
* mono-icons
* microns
* maki-icons
* majestic-icons



## 코드 기여방법
지니PHP icons 패키지는 그룹별로 등록된 SVG 아이콘을 쉽게 처리할 수 있도록 제공되는
순수 라이브러리 입니다. 깃허브 저장소를 fork후, `/resources/view` 폴더에 새로운 아이콘 그룹과 
svg 파일을 등록하시면 됩니다. 그리고 pull-request를 주시면 기여자로 등록됩니다.

또한, 추가 아이콘을 처리할 수 있는 다양한 아이디어가 있으시면, 코드를 작성해서 기여해 주세요.





## License
jinyPHP icons is open-sourced software licensedd under MIT license.
