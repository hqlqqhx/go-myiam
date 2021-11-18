1.PHP常见的常量
PHP_VERSION；
DIRECTORY_SEPARATOR;

2.单双引号
2.1 单双引号转义特殊字符
echo '单引号只能转义\\和\''."\r\n";
echo "双引号可转义多个转义字符"."\r\n";
2.2 是否能解析变量
$str = '双引号';
echo "可以解析变量的是$str";
单引号串被认为是原始文本，而PHP处理双引号串时会寻找变量；
2.3 单双单，双单双
echo '单单"没毛病"';
echo "\r\n";
echo "双双'也没毛病'";
echo "\r\n";
echo '这个要转义\'';
echo "\r\n";
echo "这个也要转义\"";

3.换行符
win: \r或者\n;
linux: \r\n；最好就使用这个，最终代码还是要在linux上跑；

4.两个符号
\:win路径分隔符，转义符  中文名反斜线
/:linux路径分隔符，除法符号  3/4;
有一个常量专门用来表示路径分隔符的
echo 'separator';
echo "\r\n";
echo 'directory';
echo "\r\n";
echo DIRECTORY_SEPARATOR;

5.