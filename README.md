# Placeholder Plugin

This plugin provides a quick and simple way for crystal-clear image placeholders using SVG.

Use `{{ placeholder()}}` to generate an image placeholder (100 x 100) by default.

## Avilable Parameters:

 * width  : image width
 * height : image height
 * color  : text color
 * font  : text font
 * background : image background color
 * fontSize : text font size
 * text : overrider the default text (width * height)

### Example 1: 

```
<div>
    <span>{{ placeholder({width : 70, height : 70})| raw}}</span>
    <span>{{ placeholder({width : 70, height : 70})| raw}}</span>
    <span>{{ placeholder({width : 70, height : 70})| raw}}</span>
    <span>{{ placeholder({width : 70, height : 70})| raw}}</span>
    <span>{{ placeholder({width : 70, height : 70})| raw}}</span>
    <span>{{ placeholder({width : 70, height : 70})| raw}}</span>
    <span>{{ placeholder({width : 70, height : 70})| raw}}</span>
</div>

<div>
    <span>{{ placeholder({width : 200, height : 200, fontSize: 14})| raw}}</span>
    <span>{{ placeholder({width : 332, height : 200,fontSize: 19})| raw}}</span>
</div>

<div>
    <span>{{ placeholder({width : 542, height : 100, fontSize: 23})| raw}}</span>
</div>
```

### Result 

![Example 1](https://raw.githubusercontent.com/websemantics/placeholder-plugin/master/resources/img/example-1.png)

### Example 2:

```
<div>
    <span>{{ placeholder({color:'#ffffff',text: 'Burnt Sienna',background: "#ff4f54"})| raw}}</span>
    <span>{{ placeholder({color:'#ffffff',text: 'Amulet',background: "#73a375"})| raw}}</span>
    <span>{{ placeholder({color:'#ffffff',text: 'Leather',background: "#97715a"})| raw}}</span>
    <span>{{ placeholder({color:'#ffffff',text: 'Polo Blue',background: "#8494cc"})| raw}}</span>
    <span>{{ placeholder({color:'#ffffff',text: 'Porsche',background: "#e4a365"})| raw}}</span>
    <span>{{ placeholder({color:'#ffffff',text: 'Ronchi',background: "#eec95b"})| raw}}</span>
    <span>{{ placeholder({color:'#ffffff',text: 'Kimberly',background: "#7078a7"})| raw}}</span>
</div>
```

### Result 

![Example 2](https://raw.githubusercontent.com/websemantics/placeholder-plugin/master/resources/img/example-2.png)

# Fluent API

When using this plugin you can either send all parameters as described above or in `fluent` format, for example:

```
<span>{{ placeholder({color:'#ffffff',text: 'Burnt Sienna',background: "#ff4f54"}) | raw}}</span>
```

Will be written in fluent as,

```
<span>{{ placeholder().color('#ffffff').text('Burnt Sienna').background("#ff4f54") | raw}}</span>
```

Or

```
<span>{{ placeholder({color:'#ffffff'}).text('Burnt Sienna').background("#ff4f54") | raw}}</span>
```

If the same parameter is being set using function parameters and the fluent api, the fluent value will supersede,

```
<span>{{ placeholder({width:300}).width(500) | raw}}</span>
```

The placeholder of the above exampel will have width of 500px.

# Change Log
All notable changes to this project will be documented in this section.

### [0.1] - 2015-12-26
#### Changed
- Quick way to create image placeholders
- Accepts width and height
- Can set background and foreground colors
- Set font size and text

# License
Placeholder Plugin is open source under MIT License.  See LICENSE.