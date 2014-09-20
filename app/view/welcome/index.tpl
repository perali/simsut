<html>
    <body>
                这里是welcome的index页面！
                {$a}
				{foreach from=$re item=temp}
					{$temp.name}
				{/foreach}
    </body>
</html>