var map = new BMap.Map("map");          // 创建地图实例
var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
var point = new BMap.Point(114.575329,38.024222);  // 创建点坐标
var markerPoint = new BMap.Point(114.575329,38.024288);
var marker = new BMap.Marker(point);  // 创建标注
map.addOverlay(marker);              // 将标注添加到地图中
map.centerAndZoom(point, 18);                 // 初始化地图，设置中心点坐标和地图级别
map.addControl(top_left_control);
map.addControl(top_left_navigation);
map.enableScrollWheelZoom(false);   //启用滚轮放大缩小，默认禁用
var opts = {
    width : 200,     // 信息窗口宽度
    height: 90,     // 信息窗口高度
    title : "河北水木文化传播有限公司 " , // 信息窗口标题
    enableMessage:false//设置允许信息窗发送短息
};
var infoWindow = new BMap.InfoWindow("地址：石家庄市裕华区大马庄园6号楼3单元1702<br>电话：18931157738", opts);  // 创建信息窗口对象
marker.addEventListener("click", function(){
    map.openInfoWindow(infoWindow,markerPoint); //开启信息窗口
});