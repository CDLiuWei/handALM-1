function initMap() {
        //����map���� ���� qq.maps.Map() ���캯��   ��ȡ��ͼ��ʾ����
	var default_zoom_level;
	default_zoom_level=parseInt($("#map_zoom").text());
	if(default_zoom_level==""){
		$("#map_zoom").val(15);
		default_zoom_level=15
	}
					  var myOptions = {
						zoom: default_zoom_level,
						mapTypeId: qq.maps.MapTypeId.ROADMAP
					  };
					  var map = new qq.maps.Map(document.getElementById("cuxMap"), myOptions);
		
		var current_lat=$("#map_lat").text();
		var current_lng=$("#map_lng").text();
		
		if ((current_lat!="") && (current_lng!="")) {	
			var current_latlng = new qq.maps.LatLng(current_lat,current_lng);
			map.setCenter(current_latlng);
			map.panTo(current_latlng);
			
			var marker=new qq.maps.Marker({
                position:(current_latlng),
				animation:qq.maps.MarkerAnimation.DROP,
				map:map
			});			
		} else {
			//��ȡ�����б�ӿ��������ĵ�
			citylocation = new qq.maps.CityService({
				complete : function(result){
					map.setCenter(result.detail.latLng);
				}
			});
			citylocation.searchLocalCity();//����searchLocalCity();����    �����û�IP��ѯ������Ϣ��
			
		}
		
	}


function loadMapScript() {
			var script = document.createElement("script");
			script.type = "text/javascript";
			script.src = "http://map.qq.com/api/js?v=2.exp&callback=initMap";
			$("#cuxMap").css("height","250px");
			document.body.appendChild(script);
		}
		


$(document).ready(function(){
		if($("#map_lat").text()!="") {
			$("#detailpanel_2").show();
			loadMapScript(); 
			//alert("loaded 3");
			//alert($("#location_maps_lat_c").text());
		} else {
			$("#detailpanel_2").hide();
		}	
	});