function rewriting(num,data) {
    //numは1から3なので0から2に修正
    num--;

    //書き換え
    document.getElementsByTagName("div")[num].childNodes[0].nodeValue = data;

    //完了通知
    alert("rewrite complete.")

}