create table if not exists public.active_visitors (
  id text primary key,
  last_seen timestamptz not null default now()
);

alter table public.active_visitors enable row level security;

create policy "public can read active visitors"
on public.active_visitors for select
to anon
using (true);

create policy "public can insert active visitors"
on public.active_visitors for insert
to anon
with check (true);

create policy "public can update active visitors"
on public.active_visitors for update
to anon
using (true)
with check (true);

create policy "public can delete active visitors"
on public.active_visitors for delete
to anon
using (true);

-- Optional cleanup: rows not seen for 60 seconds are treated as offline.
-- The site itself counts only visitors seen during the last 30 seconds.
