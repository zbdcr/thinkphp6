<?php
// 应用公共文件


/**
 * api返回输出格式
 * @param int $code
 * @param string $message
 * @param array $data
 * @param int $httpCode
 * @return \think\response\Json
 */
function show($code=0,$message='请求成功!',$data=[],$httpCode=200){
    $result = [
        'code'=>$code,
        'message'=>$message,
        'result'=>$data,
    ];
    return json($result,$httpCode);
}
