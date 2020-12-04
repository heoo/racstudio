/*!***********************************************
 Copyright (c) 2019, Neusoft Inc.
 All rights reserved
 图表秀 Version 1.0.0 2020.4.24
 ************************************************/
"use strict";angular.module("dataviz.chartedit.customProperties",[]).factory("customTips",["$translate",function(h){return{getTips:function(a,t,e){var n=e.simpleJson,r=n.data,i=n.option.properties.series.items.anyOf[0].properties.type.default,s={};for(var o in r.properties)"time"!=o&&(s[o]=r.properties[o]);if(""!==t.default)return t.default;var c="";if("sunburst"===i){if(0!==s.legend.bind.length){var d=h.instant("chartedit.LEVEL");c=c+h.instant("chartedit.option.NAME",{name:d})+"\n"}var b=s.value.bind[0];return c=c+b.fieldName+"： <"+b.fieldName+">"}if("bar"===i||"line"===i){var u=_.filter(s,function(a){if(!a.hasOwnProperty("colorType"))return!0});0!==u[0].bind.length&&(c=c+u[0].bind[0].fieldName+": <"+u[0].bind[0].name+">");var p="";0!==s.legend.bind.length&&(p="<"+s.legend.bind[0].name+">-");var l=s.value.bind;return s.valueBar&&0!=s.valueBar.bind.length&&(l=l.concat(s.valueBar.bind)),_.each(l,function(a){c=c+"\n"+p+a.fieldName+": <"+a.fieldName+">"}),"88"==e.compId&&(c+="\n累计:<Total>"),c}if("candlestick"===i){for(var f=0;f<r.default[0].length;f++){if(-1===(M=r.default[0][f].lastIndexOf("（")))c=c+r.default[0][f]+": <"+r.default[0][f]+">\n"+h.instant("chartedit.option.DAYK")+"\n";else{var m=r.default[0][f].substring(0,M);c=c+m+": <"+r.default[0][f]+">\n"}}return(c+="MA5: <MA5>\nMA10: <MA10>\nMA20: <MA20>\nMA30: <MA30>\n").substring(0,c.length-1)}if("graph"===i){c=c+s.source.bind[0].name+": <"+s.source.bind[0].name+">\n";b=s.value.bind[0];return c=c+b.fieldName+"： <"+b.fieldName+">"}for(o in r.default[0]){var M;if(-1===(M=r.default[0][o].lastIndexOf("（")))c=c+r.default[0][o]+": <"+r.default[0][o]+">\n";else{m=r.default[0][o].substring(0,M);c=c+m+": <"+r.default[0][o]+">\n"}}return _.each(s,function(a){_.each(a.bind,function(a){a.hasOwnProperty("hierarchy")&&(c=c.replace(a.name+": <"+a.name+">",a.fieldName+": <"+a.name+">"))})}),"pie"!==i&&"pinterest"!==i&&"chord"!==i||(c=c+h.instant("chartedit.option.PERCENTAGESHARE")+"\n"),c.substring(0,c.length-1)}}}]).factory("customLabels",["$translate",function(a){return{getLabels:function(e){var a=function(a,t){for(var e=new Array(a.length),n=0;n<e.length;n++)for(var r in t)for(var i=!1,s=0;s<t[r].bind.length;s++){if(t[r].bind[s].fieldName===a[n]){e[n]=t[r].name,i=!0;break}if(i)return}return e}(e.userData[0],e.simpleJson.data.properties),n={bindHintMap:{},bindHintMapContray:{}};switch(e.compId){case"7":case"41":case"42":case"411":_.each(a,function(a,t){switch(a){case"图例":n.bindHintMap["{"+e.userData[0][t]+"}"]="{b}",n.bindHintMapContray["{b}"]="{"+e.userData[0][t]+"}";break;case"数据值":n.bindHintMap["{"+e.userData[0][t]+"}"]="{c}",n.bindHintMapContray["{c}"]="{"+e.userData[0][t]+"}"}}),n.bindHintMap["{百分比}"]="{d}",n.bindHintMapContray["{d}"]="{百分比}";break;case"54":case"993":_.each(a,function(a,t){switch(a){case"省份维度":n.bindHintMap["{"+e.userData[0][t]+"}"]="{b}",n.bindHintMapContray["{b}"]="{"+e.userData[0][t]+"}";break;case"大小调整依据":n.bindHintMap["{"+e.userData[0][t]+"}"]="{c}",n.bindHintMapContray["{c}"]="{"+e.userData[0][t]+"}"}});break;case"56":_.each(a,function(a,t){switch(a){case"配色依据":n.bindHintMap["{"+e.userData[0][t]+"}"]="{a}",n.bindHintMapContray["{a}"]="{"+e.userData[0][t]+"}";break;case"国家名称":n.bindHintMap["{"+e.userData[0][t]+"}"]="{b}",n.bindHintMapContray["{b}"]="{"+e.userData[0][t]+"}";break;case"大小调整依据":n.bindHintMap["{"+e.userData[0][t]+"}"]="{c}",n.bindHintMapContray["{c}"]="{"+e.userData[0][t]+"}"}});break;case"55":_.each(a,function(a,t){switch(a){case"省份维度":n.bindHintMap["{"+e.userData[0][t]+"}"]="{b}",n.bindHintMapContray["{b}"]="{"+e.userData[0][t]+"}";break;case"明暗调整依据":n.bindHintMap["{"+e.userData[0][t]+"}"]="{c}",n.bindHintMapContray["{c}"]="{"+e.userData[0][t]+"}"}});break;case"0":_.each(a,function(a,t){switch(a){case"分类轴":n.bindHintMap["{"+e.userData[0][t]+"}"]="{b}",n.bindHintMapContray["{b}"]="{"+e.userData[0][t]+"}";break;case"图例":n.bindHintMap["{"+e.userData[0][t]+"}"]="{a}",n.bindHintMapContray["{a}"]="{"+e.userData[0][t]+"}";break;case"数据值":n.bindHintMap["{"+e.userData[0][t]+"}"]="{c}",n.bindHintMapContray["{c}"]="{"+e.userData[0][t]+"}"}});break;case"33":_.each(a,function(a,t){switch(a){case"图例":n.bindHintMap["{"+e.userData[0][t]+"}"]="{b}",n.bindHintMapContray["{b}"]="{"+e.userData[0][t]+"}";break;case"数据值":n.bindHintMap["{"+e.userData[0][t]+"}"]="{c}",n.bindHintMapContray["{c}"]="{"+e.userData[0][t]+"}"}});break;case"57":_.each(a,function(a,t){switch(a){case"半径轴":n.bindHintMap["{"+e.userData[0][t]+"}"]="{b}",n.bindHintMapContray["{b}"]="{"+e.userData[0][t]+"}";break;case"大小调整依据":n.bindHintMap["{"+e.userData[0][t]+"}"]="{c}",n.bindHintMapContray["{c}"]="{"+e.userData[0][t]+"}"}});break;case"34":_.each(a,function(a,t){switch(a){case"目的维度":n.bindHintMap["{"+e.userData[0][t]+"}"]="{b}",n.bindHintMapContray["{b}"]="{"+e.userData[0][t]+"}";break;case"指标":n.bindHintMap["{"+e.userData[0][t]+"}"]="{c}",n.bindHintMapContray["{c}"]="{"+e.userData[0][t]+"}"}});break;case"25":n.bindHintMap["{value}"]="{c}",n.bindHintMapContray["{c}"]="{value}";break;case"3":_.each(a,function(a,t){switch(a){case"x轴":n.bindHintMap["{"+e.userData[0][t]+"}"]="{b}",n.bindHintMapContray["{b}"]="{"+e.userData[0][t]+"}";break;case"图例":n.bindHintMap["{"+e.userData[0][t]+"}"]="{a}",n.bindHintMapContray["{a}"]="{"+e.userData[0][t]+"}";break;case"数据值":n.bindHintMap["{"+e.userData[0][t]+"}"]="{c}",n.bindHintMapContray["{c}"]="{"+e.userData[0][t]+"}"}})}return n}}}]).controller("editTipsCtrl",["$scope","$modal","$modalInstance","formatter",function(a,t,e,n){a.content=n,a.submit=function(){a.content===n?e.close(!1):e.close(a.content)},a.reset=function(){e.close("reset")},a.dismiss=function(){e.close(!1)}}]).controller("editLabelsCtrl",["$scope","$modal","$modalInstance","formatter",function(r,a,t,e){r.handleLabelFormatter=function(a){r.tempFormatter=angular.copy(a);var n=r.tempFormatter.match(/\{[\s\S]*?\}/g);n&&_.map(r.content.bindHintMap,function(a,t){var e=!1;0<=n.indexOf(a)?(e=!1,i(n.indexOf(a),n,e)):0<=n.indexOf(t)?(e=!0,i(n.indexOf(t),n,e)):i(-1)})};var i=function(a,t,e){0<=a&&(r.tempFormatter=e?r.tempFormatter.replace(t[a],r.content.bindHintMap[t[a]]):r.tempFormatter.replace(t[a],r.content.bindHintMapContray[t[a]]))};r.content=e,"54"===r.tempChart.compId||"993"===r.tempChart.compId?r.labelFormatter=r.tempChart.simpleJson.option.properties.series.items.anyOf[1].properties.label.properties.normal.properties.formatter.default:r.labelFormatter=r.tempChart.simpleJson.option.properties.series.items.anyOf[0].properties.label.properties.normal.properties.formatter.default,r.handleLabelFormatter(r.labelFormatter),r.showFormatter=r.tempFormatter,r.submit=function(){r.handleLabelFormatter(r.showFormatter),r.labelFormatter===r.tempFormatter?t.close(!1):t.close(r.tempFormatter)},r.reset=function(){t.close("reset")},r.dismiss=function(){t.close(!1)}}]);