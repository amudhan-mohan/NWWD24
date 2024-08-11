<?php include '../header.php'; ?>

<h2>Source Code</h2>
<link rel="stylesheet" href="../assets/css/code.css">

<!-- HTML Code Box -->
<div class="codebox">
    <button class="btn btn-secondary btn-sm copy-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">Copy</button>
    <pre><code id="html-code">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Example&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Example Heading&lt;/h1&gt;
    &lt;p&gt;This is a paragraph.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
</div>

<!-- CSS Code Box -->
<div class="codebox mt-4">
    <button class="btn btn-secondary btn-sm copy-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">Copy</button>
    <pre><code id="css-code">body {
    font-family: Arial, sans-serif;
}
h1 {
    color: blue;
}
</code></pre>
</div>

<!-- Script to Enable Copy Functionality -->
<script>
    document.querySelectorAll('.copy-btn').forEach(button => {
        button.addEventListener('click', function() {
            let codeBlock = this.nextElementSibling.querySelector('code');
            let codeText = codeBlock.textContent;
            navigator.clipboard.writeText(codeText).then(() => {
                // Show a tooltip when copied successfully
                this.setAttribute('data-bs-original-title', 'Copied!');
                let tooltip = new bootstrap.Tooltip(this);
                tooltip.show();
                setTimeout(() => {
                    tooltip.hide();
                    this.setAttribute('data-bs-original-title', 'Copy to clipboard');
                }, 2000);
            });
        });
    });
</script>

<?php include '../footer.php'; ?>
