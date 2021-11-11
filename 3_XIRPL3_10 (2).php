<!DOCTYPE html>
<head>
    <title>Array</title>
</head>

<?php
$multiarray = [
    [
        'nama' => 'satria',
        'kelas' => 'rpl 1',
    ],
    [
        'nama' => 'arsyi',
        'kelas' => 'rpl 2',
    ],
    [
        'nama' => 'dhika',
        'kelas' => 'rpl 3',
    ],
    [
        'nama' => 'evan',
        'kelas' => 'rpl 4',
    ],
    [
        'nama' => 'irfan',
        'kelas' => 'rpl 5',
    ]
]
?>
<?php
$hasil = array_slice($multiarray,0,2);
echo "<pre>";
print_r($hasil);
echo "</pre>";
?>