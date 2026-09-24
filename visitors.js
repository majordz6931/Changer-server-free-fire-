(() => {
  const key = "ff_active_visitor_" + Math.random().toString(36).slice(2);
  const api = "https://ezooggzcdybssxsukkxn.supabase.co/rest/v1/active_visitors";
  const anonKey = "sb_publishable_-ZDAj5K3P_y1PUFMnEahGg_rkxNjgS8";

  if (!anonKey) return;

  const headers = { apikey: anonKey, Authorization: "Bearer " + anonKey, "Content-Type": "application/json" };
  const id = crypto.randomUUID ? crypto.randomUUID() : Date.now() + "-" + Math.random();

  const wrap = document.createElement("div");
  wrap.id = "activeVisitors";
  wrap.innerHTML = '<span>🟢</span><strong id="activeVisitorCount">1</strong><span>active visitors now</span>';
  document.body.appendChild(wrap);

  async function heartbeat() {
    try {
      await fetch(api + "?id=eq." + encodeURIComponent(id), {
        method: "PATCH", headers,
        body: JSON.stringify({ last_seen: new Date().toISOString() })
      });
      const res = await fetch(api + "?select=id&last_seen=gte." + encodeURIComponent(new Date(Date.now()-30000).toISOString()), { headers });
      const rows = await res.json();
      document.getElementById("activeVisitorCount").textContent = Array.isArray(rows) ? rows.length : "1";
    } catch (e) {}
  }

  async function enter() {
    try {
      await fetch(api, { method: "POST", headers, body: JSON.stringify({ id, last_seen: new Date().toISOString() }) });
      heartbeat();
    } catch (e) {}
  }

  function leave() {
    fetch(api + "?id=eq." + encodeURIComponent(id), {
      method: "DELETE", headers, keepalive: true
    }).catch(() => {});
  }

  enter();
  const timer = setInterval(heartbeat, 10000);
  window.addEventListener("pagehide", leave);
  document.addEventListener("visibilitychange", () => {
    if (document.visibilityState === "visible") heartbeat();
  });
})();