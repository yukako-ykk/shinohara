
function confirmDelete(id) {
    if (confirm("削除しますか？")) {
        // ユーザーがOKを押したらPHPにPOST送信
        fetch('delete.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'id=' + encodeURIComponent(id)
        })
        .then(response => response.text())
        .then(result => {
            alert(result);
            // ページを更新する、または行を非表示にするなど
            location.reload();
        })
        .catch(error => {
            alert("エラーが発生しました: " + error);
        });
    }
}


