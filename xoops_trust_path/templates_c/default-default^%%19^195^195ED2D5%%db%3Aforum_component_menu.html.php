<?php /* Smarty version 2.6.26, created on 2013-03-06 06:05:16
         compiled from db:forum_component_menu.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:forum_component_menu.html', 28, false),)), $this); ?>
<!--[if IE 7 ]>
<style type="text/css">
   #community_left ul ul {
		/*display:inline;*/
		/*margin-top: -20px !important;*/
	}
   #community_left li {
		height: 100%;
	}
	.bbs-left-forum-list li {
		margin-top: 2px;
	}
</style>
<![endif]-->
<div id="community_left">
<h2><?php echo @_MD_D3FORUM_FORUM; ?>
</h2>
<?php if (! count ( $this->_tpl_vars['titles'] )): ?>
	<?php echo @_MD_D3FORUM_ERR_NOT_EXIST_MENU; ?>

<?php else: ?>
	<?php echo '<ul>'; ?><?php $_from = $this->_tpl_vars['titles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cid'] => $this->_tpl_vars['category']):
?><?php echo '<li><a href="" onclick="return false;"><img id="category-toggle-'; ?><?php echo $this->_tpl_vars['cid']; ?><?php echo '" src="'; ?><?php echo $this->_tpl_vars['xoops_imageurl']; ?><?php echo '/img/list_icon01.gif" width="9" height="9" /></a><a href="./?categoryId='; ?><?php echo $this->_tpl_vars['cid']; ?><?php echo '">&nbsp;'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['category']['cat_title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</a></li>'; ?><?php if (count ( $this->_tpl_vars['category']['forums'] )): ?><?php echo '<li id="forum-toggle-'; ?><?php echo $this->_tpl_vars['cid']; ?><?php echo '" style="display:none;"><ul class="bbs-left-forum-list" style="margin:0;">'; ?><?php $_from = $this->_tpl_vars['category']['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fid'] => $this->_tpl_vars['forum_item']):
?><?php echo '<li><span class="flag01">&nbsp;<a href="./?forumId='; ?><?php echo $this->_tpl_vars['fid']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['forum_item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['forum_item']['hasNewPost']): ?><?php echo '<span class="bbs-new-mark">&nbsp;'; ?><?php echo @_MD_D3FORUM_NEW_MARK; ?><?php echo '</span>'; ?><?php endif; ?><?php echo '</span></li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul></li>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul>'; ?>

<?php endif; ?>

<script type="text/javascript">
/* Browser Detection
----------------------------------------------------------------------------- */
var _BROWSER_IS_IE =
    (document.all
     && window.ActiveXObject
     && navigator.userAgent.toLowerCase().indexOf("msie") > -1
     && navigator.userAgent.toLowerCase().indexOf("opera") == -1);

/**
 * I hate navigator string based browser detection too, but when Opera alone
 * chokes on cookies containing double quotes...
 */
var _BROWSER_IS_OPERA =
    (navigator.userAgent.toLowerCase().indexOf("opera") != -1);

/* CookieManager Object
----------------------------------------------------------------------------- */
/**
 * Provides a simple interface for creating, retrieving and clearing cookies.
 *
 * @author Jonathan Buchanan
 * @version 0.8
 * @dependencies $() in Core.js
 */
CookieManager = Class.create();
CookieManager.prototype =
{
    /**
     * Determines if this object will use IE's proprietary userData behaviour
     * instead of cookies for storage.
     */
    userDataForIE: false,

    initialize: function(userDataForIE)
    {
        this.cookieShelfLife = 365;
        this.userDataForIE = userDataForIE;

        // Internet Explorer has a cookie handling bug - if the *combined size*
        // of all cookies stored for a given domain is greater than 4096 bytes,
        // document.cookie will return an empty string. Until this is fixed , we
        // will fall back on IE's proprietary userData behaviour.
        if (_BROWSER_IS_IE && this.userDataForIE)
        {
            this.IE_CACHE_NAME = "storage";
            if ($(this.IE_CACHE_NAME) == null)
            {
                var div = document.createElement("DIV");
                div.id = this.IE_CACHE_NAME;
                document.body.appendChild(div);
            }
            this.store = $(this.IE_CACHE_NAME);
            this.store.style.behavior = "url('#default#userData')";
        }
    },

    /**
     * Returns the value of a cookie with the given name, or <code>null</code>
     * if no such cookie exists.
     */
    getCookie: function(aCookieName)
    {
        var result = null;
        if (_BROWSER_IS_IE && this.userDataForIE)
        {
            this.store.load(this.IE_CACHE_NAME);
            result = this.store.getAttribute(aCookieName);
        }
        else
        {
            for (var i = 0; i < document.cookie.split('; ').length; i++)
            {
                var crumb = document.cookie.split('; ')[i].split('=');
                if (crumb[0] == aCookieName && crumb[1] != null)
                {
                    result = crumb[1];
                    break;
                }
            }
        }

        if (_BROWSER_IS_OPERA && result != null)
        {
            result = result.replace(/%22/g, '"');
        }
        return result;
    },

    /**
     * Sets a cookie with the given name and value.
     */
    setCookie: function(aCookieName, aCookieValue)
    {
        if (_BROWSER_IS_IE && this.userDataForIE)
        {
            this.store.setAttribute(aCookieName, aCookieValue);
            this.store.save(this.IE_CACHE_NAME);
        }
        else
        {
            if (_BROWSER_IS_OPERA)
            {
                aCookieValue = aCookieValue.replace(/"/g, "%22");
            }
            var date = new Date();
            date.setTime(date.getTime() + (this.cookieShelfLife * 24*60*60*1000));
            var expires = '; expires=' + date.toGMTString();
            document.cookie = aCookieName + '=' + aCookieValue + expires + '; path=/';
        }
    },

    /**
     * Clears the cookie with the given name.
     */
    clearCookie: function(aCookieName)
    {
        if (_BROWSER_IS_IE && this.userDataForIE)
        {
            this.store.load(this.IE_CACHE_NAME);
            this.store.removeAttribute(aCookieName);
            this.store.save(this.IE_CACHE_NAME);
        }
        else
        {
            document.cookie =
                aCookieName + '=;expires=Thu, 01-Jan-1970 00:00:01 GMT; path=/';
        }
    }
}

Event.observe(window, 'load', function() {
	var cookieManager = new CookieManager();
	var ids = new Array();
	<?php $_from = $this->_tpl_vars['titles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['category']):
?>
		Event.observe('category-toggle-<?php echo $this->_tpl_vars['key']; ?>
', 'click', forumToggle);

		if (cookieManager.getCookie('forum-<?php echo $this->_tpl_vars['key']; ?>
') == 'hide') {
			forumHide('<?php echo $this->_tpl_vars['key']; ?>
');
		} else {
			forumShow('<?php echo $this->_tpl_vars['key']; ?>
');
		}
	<?php endforeach; endif; unset($_from); ?>

	function forumToggle(event) {
		try {
			var element = Event.element(event);
			var id = element.id.replace(/category-toggle-/, '');
			if ($('forum-toggle-' + id).visible()) {
				forumHide(id);
			} else {
				forumShow(id);
			}
		} catch (e) {
			;
		}
	}

	function forumShow(id) {
		try {
			$('forum-toggle-' + id).show();
			$('category-toggle-' + id).src = '<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/list_icon01.gif';
			cookieManager.setCookie('forum-' + id, 'show');
		} catch(e) {
			;
		}
	}
	function forumHide(id) {
		try {
			$('forum-toggle-' + id).hide();
			$('category-toggle-' + id).src = '<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/list_icon02.gif';
			cookieManager.setCookie('forum-' + id, 'hide');
		} catch(e) {
			;
		}
	}
});
</script>