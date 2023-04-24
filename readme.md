# CKEDITOR FOR YUGAL
Creates rich text input field with text formatting, returns output in ```html``` code.

Install it using the command below.
```bash
    yugal --install https://github.com/sinhapaurush/ckeditor.git
```

After installing, paste the following code in your ```string.php``` file, you can customize your text input type with the following code, if this step is not done, a moderate text editor will be created.
```bash
    /* ACCEPTED VALUES: basic | standard | full */
    // 'standard' BY DEFAULT
    $ckeditor_type = "basic";
```

**Accepted Values**: ```basic``` | ```standard``` | ```full```.

```js
CKEDITOR.replace('name-of-input');
```
Go to [CKEditor](http://ckeditor.com/) to learn more.
