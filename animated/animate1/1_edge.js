/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "1.5.0",
   minimumCompatibleVersion: "1.5.0",
   build: "1.5.0.217",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'Ellipse',
            type:'ellipse',
            rect:['48px','72px','52px','52px','auto','auto'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(235,56,56,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"]
         },
         {
            id:'EllipseCopy',
            type:'ellipse',
            rect:['48px','72px','52px','52px','auto','auto'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(235,56,56,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"]
         },
         {
            id:'EllipseCopy2',
            type:'ellipse',
            rect:['48px','72px','52px','52px','auto','auto'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(235,56,56,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"]
         },
         {
            id:'EllipseCopy3',
            type:'ellipse',
            rect:['48px','72px','52px','52px','auto','auto'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(235,56,56,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"]
         },
         {
            id:'EllipseCopy5',
            type:'ellipse',
            rect:['48px','72px','52px','52px','auto','auto'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(235,56,56,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"]
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_EllipseCopy5}": [
            ["color", "background-color", 'rgba(235,56,56,1.00)'],
            ["style", "left", '48px'],
            ["style", "top", '72px']
         ],
         "${_Ellipse}": [
            ["color", "background-color", 'rgba(235,56,56,1.00)'],
            ["style", "top", '72px'],
            ["style", "left", '48px']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '550px'],
            ["style", "height", '400px'],
            ["style", "overflow", 'hidden']
         ],
         "${_EllipseCopy}": [
            ["color", "background-color", 'rgba(235,56,56,1.00)'],
            ["style", "top", '72px'],
            ["style", "left", '48px']
         ],
         "${_EllipseCopy2}": [
            ["color", "background-color", 'rgba(235,56,56,1.00)'],
            ["style", "top", '72px'],
            ["style", "left", '48px']
         ],
         "${_EllipseCopy3}": [
            ["color", "background-color", 'rgba(235,56,56,1.00)'],
            ["style", "top", '72px'],
            ["style", "left", '48px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 6500,
         autoPlay: true,
         timeline: [
            { id: "eid58", tween: [ "style", "${_Ellipse}", "top", '296px', { fromValue: '72px'}], position: 0, duration: 2000 },
            { id: "eid74", tween: [ "style", "${_Ellipse}", "top", '174px', { fromValue: '296px'}], position: 2000, duration: 1000 },
            { id: "eid111", tween: [ "style", "${_Ellipse}", "top", '73px', { fromValue: '174px'}], position: 3000, duration: 3500 },
            { id: "eid53", tween: [ "style", "${_EllipseCopy2}", "top", '296px', { fromValue: '72px'}], position: 0, duration: 1000 },
            { id: "eid65", tween: [ "style", "${_EllipseCopy2}", "top", '72px', { fromValue: '296px'}], position: 1000, duration: 1000 },
            { id: "eid69", tween: [ "style", "${_EllipseCopy2}", "top", '148px', { fromValue: '72px'}], position: 2000, duration: 1000 },
            { id: "eid79", tween: [ "style", "${_EllipseCopy2}", "top", '56px', { fromValue: '148px'}], position: 3000, duration: 1000 },
            { id: "eid93", tween: [ "style", "${_EllipseCopy2}", "top", '174px', { fromValue: '56px'}], position: 4000, duration: 500 },
            { id: "eid102", tween: [ "style", "${_EllipseCopy2}", "top", '73px', { fromValue: '174px'}], position: 4500, duration: 1500 },
            { id: "eid55", tween: [ "style", "${_EllipseCopy}", "top", '296px', { fromValue: '72px'}], position: 0, duration: 1000 },
            { id: "eid61", tween: [ "style", "${_EllipseCopy}", "top", '72px', { fromValue: '296px'}], position: 1000, duration: 1000 },
            { id: "eid73", tween: [ "style", "${_EllipseCopy}", "top", '148px', { fromValue: '72px'}], position: 2000, duration: 1000 },
            { id: "eid78", tween: [ "style", "${_EllipseCopy}", "top", '56px', { fromValue: '148px'}], position: 3000, duration: 1000 },
            { id: "eid89", tween: [ "style", "${_EllipseCopy}", "top", '174px', { fromValue: '56px'}], position: 4000, duration: 500 },
            { id: "eid108", tween: [ "style", "${_EllipseCopy}", "top", '348px', { fromValue: '174px'}], position: 4500, duration: 1500 },
            { id: "eid113", tween: [ "style", "${_EllipseCopy}", "top", '73px', { fromValue: '348px'}], position: 6000, duration: 500 },
            { id: "eid54", tween: [ "style", "${_EllipseCopy2}", "left", '303px', { fromValue: '48px'}], position: 0, duration: 1000 },
            { id: "eid64", tween: [ "style", "${_EllipseCopy2}", "left", '298px', { fromValue: '303px'}], position: 1000, duration: 1000 },
            { id: "eid94", tween: [ "style", "${_EllipseCopy2}", "left", '287px', { fromValue: '298px'}], position: 2000, duration: 2500 },
            { id: "eid100", tween: [ "style", "${_EllipseCopy2}", "left", '0px', { fromValue: '287px'}], position: 4500, duration: 500 },
            { id: "eid101", tween: [ "style", "${_EllipseCopy2}", "left", '52px', { fromValue: '0px'}], position: 5000, duration: 1000 },
            { id: "eid57", tween: [ "style", "${_Ellipse}", "left", '44px', { fromValue: '48px'}], position: 0, duration: 1000 },
            { id: "eid59", tween: [ "style", "${_Ellipse}", "left", '42px', { fromValue: '44px'}], position: 1000, duration: 1000 },
            { id: "eid75", tween: [ "style", "${_Ellipse}", "left", '52px', { fromValue: '42px'}], position: 2000, duration: 1000 },
            { id: "eid80", tween: [ "style", "${_Ellipse}", "left", '0px', { fromValue: '52px'}], position: 3000, duration: 1000 },
            { id: "eid110", tween: [ "style", "${_Ellipse}", "left", '52px', { fromValue: '0px'}], position: 4000, duration: 2500 },
            { id: "eid50", tween: [ "style", "${_EllipseCopy5}", "left", '384px', { fromValue: '48px'}], position: 0, duration: 1000 },
            { id: "eid62", tween: [ "style", "${_EllipseCopy5}", "left", '151px', { fromValue: '384px'}], position: 1000, duration: 1000 },
            { id: "eid71", tween: [ "style", "${_EllipseCopy5}", "left", '158px', { fromValue: '151px'}], position: 2000, duration: 1000 },
            { id: "eid91", tween: [ "style", "${_EllipseCopy5}", "left", '149px', { fromValue: '158px'}], position: 3000, duration: 1500 },
            { id: "eid97", tween: [ "style", "${_EllipseCopy5}", "left", '0px', { fromValue: '149px'}], position: 4500, duration: 500 },
            { id: "eid104", tween: [ "style", "${_EllipseCopy5}", "left", '52px', { fromValue: '0px'}], position: 5000, duration: 1000 },
            { id: "eid51", tween: [ "style", "${_EllipseCopy3}", "left", '384px', { fromValue: '48px'}], position: 0, duration: 1000 },
            { id: "eid66", tween: [ "style", "${_EllipseCopy3}", "left", '298px', { fromValue: '384px'}], position: 1000, duration: 1000 },
            { id: "eid96", tween: [ "style", "${_EllipseCopy3}", "left", '287px', { fromValue: '298px'}], position: 2000, duration: 2500 },
            { id: "eid99", tween: [ "style", "${_EllipseCopy3}", "left", '0px', { fromValue: '287px'}], position: 4500, duration: 500 },
            { id: "eid105", tween: [ "style", "${_EllipseCopy3}", "left", '52px', { fromValue: '0px'}], position: 5000, duration: 1000 },
            { id: "eid56", tween: [ "style", "${_EllipseCopy}", "left", '149px', { fromValue: '48px'}], position: 0, duration: 1000 },
            { id: "eid60", tween: [ "style", "${_EllipseCopy}", "left", '151px', { fromValue: '149px'}], position: 1000, duration: 1000 },
            { id: "eid72", tween: [ "style", "${_EllipseCopy}", "left", '158px', { fromValue: '151px'}], position: 2000, duration: 1000 },
            { id: "eid90", tween: [ "style", "${_EllipseCopy}", "left", '149px', { fromValue: '158px'}], position: 3000, duration: 1500 },
            { id: "eid98", tween: [ "style", "${_EllipseCopy}", "left", '0px', { fromValue: '149px'}], position: 4500, duration: 500 },
            { id: "eid107", tween: [ "style", "${_EllipseCopy}", "left", '52px', { fromValue: '0px'}], position: 5000, duration: 1000 },
            { id: "eid52", tween: [ "style", "${_EllipseCopy3}", "top", '195px', { fromValue: '72px'}], position: 0, duration: 1000 },
            { id: "eid67", tween: [ "style", "${_EllipseCopy3}", "top", '303px', { fromValue: '195px'}], position: 1000, duration: 1000 },
            { id: "eid68", tween: [ "style", "${_EllipseCopy3}", "top", '200px', { fromValue: '303px'}], position: 2000, duration: 1000 },
            { id: "eid76", tween: [ "style", "${_EllipseCopy3}", "top", '289px', { fromValue: '200px'}], position: 3000, duration: 1000 },
            { id: "eid95", tween: [ "style", "${_EllipseCopy3}", "top", '174px', { fromValue: '289px'}], position: 4000, duration: 500 },
            { id: "eid106", tween: [ "style", "${_EllipseCopy3}", "top", '254px', { fromValue: '174px'}], position: 4500, duration: 1500 },
            { id: "eid112", tween: [ "style", "${_EllipseCopy3}", "top", '73px', { fromValue: '254px'}], position: 6000, duration: 500 },
            { id: "eid63", tween: [ "style", "${_EllipseCopy5}", "top", '296px', { fromValue: '72px'}], position: 0, duration: 2000 },
            { id: "eid70", tween: [ "style", "${_EllipseCopy5}", "top", '200px', { fromValue: '296px'}], position: 2000, duration: 1000 },
            { id: "eid77", tween: [ "style", "${_EllipseCopy5}", "top", '289px', { fromValue: '200px'}], position: 3000, duration: 1000 },
            { id: "eid92", tween: [ "style", "${_EllipseCopy5}", "top", '174px', { fromValue: '289px'}], position: 4000, duration: 500 },
            { id: "eid103", tween: [ "style", "${_EllipseCopy5}", "top", '-5px', { fromValue: '174px'}], position: 4500, duration: 1500 },
            { id: "eid109", tween: [ "style", "${_EllipseCopy5}", "top", '73px', { fromValue: '-5px'}], position: 6000, duration: 500 }         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-1130301");
