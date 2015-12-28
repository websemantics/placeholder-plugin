# Placeholder Plugin

This plugin provides a quick and simple way for image placeholder.

Use `{{ placeholder()}}` to generate an image placeholder (100 x 100) by default

## Avilable Parameters:

 * width  : image width
 * height : image height
 * color : text color
 * background : image background color
 * fontSize : text font size
 * text : overrider the default text (width * height)

### Example 1:

```
<div>
	<span>{{ placeholder({width : 70, height : 70})}}</span>
	<span>{{ placeholder({width : 70, height : 70})}}</span>
	<span>{{ placeholder({width : 70, height : 70})}}</span>
	<span>{{ placeholder({width : 70, height : 70})}}</span>
	<span>{{ placeholder({width : 70, height : 70})}}</span>
	<span>{{ placeholder({width : 70, height : 70})}}</span>
	<span>{{ placeholder({width : 70, height : 70})}}</span>
</div>

<div>
    <span style="margin-right:7px">{{ placeholder({width : 200, height : 200, fontSize: 14})}}</span>
    <span>{{ placeholder({width : 332, height : 200,fontSize: 19})}}</span>
</div>

<div>
    <span>{{ placeholder({width : 542, height : 100, fontSize: 23})}}</span>
</div>
```

### Result 

![Example 1](https://raw.githubusercontent.com/websemantics/placeholder-plugin/master/resources/img/example1.png)

### Example 2:

```
<div>
<span>{{ placeholder({color:'#ffffff',text: 'Burnt Sienna',background: "#ff4f54"})}}</span>
<span>{{ placeholder({color:'#ffffff',text: 'Amulet',background: "#73a375"})}}</span>
<span>{{ placeholder({color:'#ffffff',text: 'Leather',background: "#97715a"})}}</span>
<span>{{ placeholder({color:'#ffffff',text: 'Polo Blue',background: "#8494cc"})}}</span>
<span>{{ placeholder({color:'#ffffff',text: 'Porsche',background: "#e4a365"})}}</span>
<span>{{ placeholder({color:'#ffffff',text: 'Ronchi',background: "#eec95b"})}}</span>
<span>{{ placeholder({color:'#ffffff',text: 'Kimberly',background: "#7078a7"})}}</span>
</div>
```

### Result 

![Example 2](https://raw.githubusercontent.com/websemantics/placeholder-plugin/master/resources/img/example2.png)

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