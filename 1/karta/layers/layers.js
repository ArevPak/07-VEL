var wms_layers = [];


        var lyr_SputnikMap_0 = new ol.layer.Tile({
            'title': 'Sputnik Map',
            'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: ' ',
                url: 'http://tiles.maps.sputnik.ru/tiles/kmt2/{z}/{x}/{y}.png'
            })
        });
var format_doorogi_1 = new ol.format.GeoJSON();
var features_doorogi_1 = format_doorogi_1.readFeatures(json_doorogi_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_doorogi_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_doorogi_1.addFeatures(features_doorogi_1);
var lyr_doorogi_1 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_doorogi_1, 
                style: style_doorogi_1,
                interactive: true,
                title: '<img src="styles/legend/doorogi_1.png" /> doorogi'
            });
var format_zu_2 = new ol.format.GeoJSON();
var features_zu_2 = format_zu_2.readFeatures(json_zu_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_zu_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_zu_2.addFeatures(features_zu_2);
var lyr_zu_2 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_zu_2, 
                style: style_zu_2,
                interactive: true,
                title: '<img src="styles/legend/zu_2.png" /> zu'
            });
var format_zdaniya_3 = new ol.format.GeoJSON();
var features_zdaniya_3 = format_zdaniya_3.readFeatures(json_zdaniya_3, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_zdaniya_3 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_zdaniya_3.addFeatures(features_zdaniya_3);
var lyr_zdaniya_3 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_zdaniya_3, 
                style: style_zdaniya_3,
                interactive: true,
                title: '<img src="styles/legend/zdaniya_3.png" /> zdaniya'
            });
var format_1_4 = new ol.format.GeoJSON();
var features_1_4 = format_1_4.readFeatures(json_1_4, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_1_4 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_1_4.addFeatures(features_1_4);
var lyr_1_4 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_1_4, 
                style: style_1_4,
                interactive: true,
                title: '<img src="styles/legend/1_4.png" /> 1'
            });

lyr_SputnikMap_0.setVisible(true);lyr_doorogi_1.setVisible(true);lyr_zu_2.setVisible(true);lyr_zdaniya_3.setVisible(true);lyr_1_4.setVisible(true);
var layersList = [lyr_SputnikMap_0,lyr_doorogi_1,lyr_zu_2,lyr_zdaniya_3,lyr_1_4];
lyr_doorogi_1.set('fieldAliases', {'вид': 'вид', 'кад. н': 'кад. н', 'кад. к': 'кад. к', 'стату': 'стату', 'адрес': 'адрес', 'кат. з': 'кат. з', 'форма': 'форма', 'кад. с': 'кад. с', 'площа': 'площа', 'разр.': 'разр.', 'по до�': 'по до�', });
lyr_zu_2.set('fieldAliases', {'id': 'id', 'кад.н�': 'кад.н�', 'катег': 'катег', 'адрес': 'адрес', 'общ.п�': 'общ.п�', 'форм.�': 'форм.�', 'стату': 'стату', 'кад.к�': 'кад.к�', 'кад.с�': 'кад.с�', });
lyr_zdaniya_3.set('fieldAliases', {'id': 'id', '����': '����', '���.': '���.', '����_1': '����_1', '����_2': '����_2', '���': '���', '����_3': '����_3', '����_4': '����_4', '����_5': '����_5', '����_6': '����_6', '����_7': '����_7', });
lyr_1_4.set('fieldAliases', {'field_1': 'field_1', 'field_2': 'field_2', 'field_3': 'field_3', });
lyr_doorogi_1.set('fieldImages', {'вид': '', 'кад. н': '', 'кад. к': '', 'стату': '', 'адрес': '', 'кат. з': '', 'форма': '', 'кад. с': '', 'площа': '', 'разр.': '', 'по до�': '', });
lyr_zu_2.set('fieldImages', {'id': '', 'кад.н�': '', 'катег': '', 'адрес': '', 'общ.п�': '', 'форм.�': '', 'стату': '', 'кад.к�': '', 'кад.с�': '', });
lyr_zdaniya_3.set('fieldImages', {'id': 'Range', '����': 'TextEdit', '���.': 'TextEdit', '����_1': 'TextEdit', '����_2': 'TextEdit', '���': 'TextEdit', '����_3': 'TextEdit', '����_4': 'TextEdit', '����_5': 'TextEdit', '����_6': 'TextEdit', '����_7': 'TextEdit', });
lyr_1_4.set('fieldImages', {'field_1': '', 'field_2': '', 'field_3': '', });
lyr_doorogi_1.set('fieldLabels', {'вид': 'no label', 'кад. н': 'no label', 'кад. к': 'no label', 'стату': 'no label', 'адрес': 'no label', 'кат. з': 'no label', 'форма': 'no label', 'кад. с': 'no label', 'площа': 'no label', 'разр.': 'no label', 'по до�': 'no label', });
lyr_zu_2.set('fieldLabels', {'id': 'no label', 'кад.н�': 'no label', 'катег': 'no label', 'адрес': 'no label', 'общ.п�': 'no label', 'форм.�': 'no label', 'стату': 'no label', 'кад.к�': 'no label', 'кад.с�': 'no label', });
lyr_zdaniya_3.set('fieldLabels', {'id': 'no label', '����': 'no label', '���.': 'no label', '����_1': 'no label', '����_2': 'no label', '���': 'no label', '����_3': 'no label', '����_4': 'no label', '����_5': 'no label', '����_6': 'no label', '����_7': 'no label', });
lyr_1_4.set('fieldLabels', {'field_1': 'no label', 'field_2': 'no label', 'field_3': 'no label', });
lyr_1_4.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});