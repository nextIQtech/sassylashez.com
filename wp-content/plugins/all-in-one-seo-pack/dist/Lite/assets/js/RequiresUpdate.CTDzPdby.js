import{g as a}from"./links.w575jfOL.js";import{a as r}from"./addons.CJ8lJt9v.js";function u({next:n,router:t,to:e}){return a().isUnlicensed||!r.isActive(e.meta.middlewareData.addon)?(n(),t.push({name:e.meta.middlewareData.routeName}).catch(()=>{})):n()}function c({next:n,router:t,to:e}){return a().isUnlicensed||!r.hasMinimumVersion(e.meta.middlewareData.addon)?(n(),t.push({name:e.meta.middlewareData.routeName}).catch(()=>{})):n()}export{u as R,c as a};