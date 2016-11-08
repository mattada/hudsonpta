<h2>Upcoming Events</h2>
					<ul class="eventlist">
						{% for entry in craft.entries.section('events').limit(5).find() %}
								<li><a href="{{ entry.url }}">{{ entry.title }}<br>{{ entry.eventDate.format('F d, Y - h:i A') }}
									<br>
									<p> See full details <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
									
								</a></li>
							{% endfor %}
					</ul>