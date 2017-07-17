<h2>
    <?= $this->input("myHeadline"); ?>
</h2>

<section id="marked-content">
    <?= $this->wysiwyg("specialContent", [
        "height" => 200
    ]); ?>
</section>

<?= $this->areablock("myAreablock", [
    "allowed" => ["iframe","googletagcloud","spacer","rssreader"],
    "group" => [
        "First Group" => ["iframe", "spacer"],
        "Second Group" => ["rssreader"]
    ],
    "areablock_toolbar" => [
        "title" => "",
        "width" => 230,
        "x" => 20,
        "y" => 50,
        "xAlign" => "right",
        "buttonWidth" => 218,
        "buttonMaxCharacters" => 35
    ],
    "params" => [
        "iframe" => [ // some additional parameters / configuration for the brick type "iframe"
            "parameter1" => "value1",
            "parameter2" => "value2"
        ],
        "googletagcloud" => [ // additional parameter for the brick type "googletagcloud"
            "param1" => "value1"
        ]
    ]]);
?>