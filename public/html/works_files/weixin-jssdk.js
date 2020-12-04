/*!***********************************************
 Copyright (c) 2019, Neusoft Inc.
 All rights reserved
 图表秀 Version 1.0.0 2020.4.24
 ************************************************/
"use strict";"undefined"!=typeof wx&&(window.wxx=angular.copy(wx),wx=void 0),angular.module("weixin-jssdk",[]).service("WeixinSDK",["$http",function(n){this.config=function(e,i,s,t){n.get(charts_server+"/service/weixin/sign",{params:{url:e.split("#")[0]}}).success(function(e){if(e.object){var n=e.object;wxx.config({debug:!1,appId:n.appId,timestamp:n.timestamp,nonceStr:n.nonceStr,signature:n.signature,jsApiList:["onMenuShareTimeline","onMenuShareAppMessage"]}),wxx.ready(function(){wxx.onMenuShareTimeline(i||{}),wxx.onMenuShareAppMessage(s||{})}),wxx.error(function(e){t||t(e)})}})}}]);