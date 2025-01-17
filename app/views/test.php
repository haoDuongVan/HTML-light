<h1>Danh sách các bảng trong cơ sở dữ liệu</h1>
<ul>
    <?php foreach ($data['tables'] as $table): ?>
        <li><?= implode('', $table) ?></li>
    <?php endforeach; ?>
</ul>
