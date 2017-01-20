<a href="?action=admin&cms_action=insert">Insert data</a><br>
<p>Content:</p>
   <table>
       <tr>
           <td>id</td>
           <td>name</td>
           <td>text</td>
       </tr>
    </table>
    <hr>
    <table>
    {foreach from=$result item=oneItem}
       <tr>
            <td>{$oneItem.id}</td>
            <td>{$oneItem.name}</td>
            <td>{$oneItem.text}</td>
            
            <td><a href="?action=admin&cms_action=edit&id={$oneItem.id}">edit</a></td>
            <td><a href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>
       </tr>
       
    {/foreach}
</table>
