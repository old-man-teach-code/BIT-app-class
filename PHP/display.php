<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>

<body>
    <h1>
        This is the display page
    </h1>
    <span id="user-name" style="display:none">
        <?php
        echo $_POST['name'];
        ?>
    </span>
    <span id="user-dob" style="display:none">
        <?php
        echo $_POST['date'];
        ?>
    </span>

    <div id="table">

    </div>
</body>

</html>
<script>
    // lấy thông tin từ các thẻ span
    let name = document.getElementById('user-name').innerText;
    console.log("Name: ", name);
    let dob = document.getElementById('user-dob').innerText;
    console.log("Date of Birth: ", dob);

    // check xem listUser đã tồn tại chưa
    if(localStorage.getItem('listUser')){
        let list = JSON.parse(localStorage.getItem('listUser'));
        console.log("List User: ", list);
        list.push({
            name: name,
            dob: dob
        })
        localStorage.setItem('listUser', JSON.stringify(list));
    }else{ // nếu không tồn tại thì tạo mới
        let list = [];
        list.push({
            name: name,
            dob: dob
        })
        localStorage.setItem('listUser', JSON.stringify(list));
    }
    
    console.log("List User: ", JSON.parse(localStorage.getItem('listUser'))); // kiểm tra

    // tạo ra table để hiển thị danh sách user
    let table = document.getElementById('table');
    let listUser = JSON.parse(localStorage.getItem('listUser'));
    let html = '<table border="1">';
    html += '<tr>';
    html += '<th>Name</th>';
    html += '<th>Date of Birth</th>';
    html += '</tr>';
    listUser.forEach(user => {
        html += '<tr>';
        html += '<td>' + user.name + '</td>';
        html += '<td>' + user.dob + '</td>';
        html += '</tr>';
    });
    html += '</table>';
    table.innerHTML = html;

    // print
    window.print();

</script>