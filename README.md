学校で自作したものです。
講師の指示ではなく、空き時間に自ら作ってみたいと思ったものになります。


nekocafe・・・
保護猫カフェのデモサイトです。
まだ未完成のページやシステムがありますが、主にPHPとJavaScriptを用いて制作しています。
トップページでは、JavaScriptの練習として、画像を切り替えるスライドショーを作っています。
お店についてのページでは、JQueryによる画像のフェードインを実装しています。
アクセスのページでは、fabric.min.jsを使って簡単なアニメーションを製作しています。

今後は、DB（XAMPPを活用）に接続して、クライアントから入力された予約データをDBに格納できるようにする予定です。

dot・・・
ドット絵を製作するウェブページです。
主にJavaScriptとtableタグで制作しています。
クライアントに色を手入力してもらい、ドラッグで自由に絵を描けるようになっています。
消しゴム機能もドラッグで操作できます。
格子線を消したり、背景色を自由に変更したりもできます。
また、ダウンロードボタンを押すと、キャンバス要素として、イメージデータがクライアントのOSにダウンロードされます。

layout・・・
画像をアップロードして、好きなように配置するWebサイトです。
まだ未完ですが、背景画像を指定したり、アップロードした画像をドラッグで動かしたりできます。
また、画像の位置を取得するために、テストとして
１．画像がドラッグされたときに数値が変わるテキスト
２．キャンバス上をクリックしたら、その地点の数値が表示されるテキスト
の２つを作って表示しています。

今後は、画像ごとに位置を示す数値欄を分けることと、画像移動のコードの簡略化に挑戦したいと思います。

html2canvasではキャンバス汚染のエラーが出たため、実装は避けました。
