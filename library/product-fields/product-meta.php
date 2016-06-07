<div class="my_meta_control">
 
    <label>Testo link</label>
 
    <p>
        <textarea name="_my_meta[description]" rows="3"><?php if(!empty($meta['description'])){ echo $meta['description']; } else {echo "N/A";}?></textarea>
        <span>Inserisci il testo del bottone allo store esterno</span>
    </p>
    
    <label>Link per l'acquisto</label>
 
    <p>
        <input type="text" name="_my_meta[storelink]" value="<?php if(!empty($meta['storelink'])) {echo $meta['storelink']; } else {echo "#";}?>"/>
        <span>Inserisci il link dello store dove il prodotto è ora disponibile</span>
    </p>
 
</div>